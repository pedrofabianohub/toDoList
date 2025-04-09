<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;
use App\Models\Task;
use Carbon\Carbon;
use NunoMaduro\Collision\Adapters\Phpunit\State;

class ApiController extends Controller
{
    public function home(Request $request)
    {

        $task = Task::all();

        return view("home", ["tasks" => $task]);
    }

    public function create(Request $request)
    {
        return view("createTask");
    }

    public function createPost(Request $request)
    {
        $task = Task::create([
            'user_id' => 1,
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'dueDate' => $request->input('dueDate'),
            'status_id' => 1,
        ]);
        $dbTask = $task;
        return redirect()->route('home');
    }

    public function read(Request $request)
    {
        return view("home");
    }

    public function readById($id)
    {
        $task = Task::findOrFail($id);

        return view('readById', ['task' => $task]);
    }

    public function update(Request $request, $id)
    {
        $task = Task::find($id);

        if (!$task) {
            return redirect()->route('home')->with('error', 'Tarefa não encontrada.');
        }

        $data['task'] = $task;

        return view("edit", $data); // Certifique-se de que a view "updateTask.blade.php" existe
    }

    public function updatePost(Request $request, $id)
    {
        $task = Task::find($id);

        if (!$task) {
            return redirect()->route('home')->with('error', 'Tarefa não encontrada.');
        }


        if (in_array($task->status_id, [2, 3])) {
            $requestDueDate = Carbon::parse($request->input('dueDate'))->format('Y-m-d H:i:s');
            $taskDueDate = Carbon::parse($task->dueDate)->format('Y-m-d H:i:s');

            if ($requestDueDate !== $taskDueDate) {
                return redirect()->back()->withInput()->with('error', 'Não é possível alterar a data de uma tarefa em andamento ou concluída.');
            }
        }

        // Atualiza os dados da tarefa
        $task->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'dueDate' => $request->input('dueDate'),
            'status_id' => $request->input('status_id', $task->status_id), // Mantém o status atual se não for enviado
        ]);

        return redirect()->route('home')->with('success', 'Tarefa atualizada com sucesso.');
    }

    public function delete(Request $request, $id)
    {
        $task = Task::find($id);

        if($task){
            $task->delete();
        }

        return redirect()->route('home');
    }
}
