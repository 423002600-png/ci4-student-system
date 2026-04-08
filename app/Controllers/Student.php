<?php namespace App\Controllers;

use App\Models\StudentModel;

class Student extends BaseController
{
    public function index()
    {
        $model = new StudentModel();
        $data['students'] = $model->paginate(5);
        $data['pager'] = $model->pager;
        return view('students/index', $data);
    }

    public function create()
    {
        return view('students/create');
    }

    public function store()
    {
        $model = new StudentModel();
        $model->save([
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'course' => $this->request->getPost('course'),
        ]);
        return redirect()->to('/student');
    }

    public function edit($id)
    {
        $model = new StudentModel();
        $data['student'] = $model->find($id);
        return view('students/edit', $data);
    }

    public function update($id)
    {
        $model = new StudentModel();
        $model->update($id, [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'course' => $this->request->getPost('course'),
        ]);
        return redirect()->to('/student');
    }

    public function delete($id)
    {
        $model = new StudentModel();
        $model->delete($id);
        return redirect()->to('/student');
    }

    // 🔍 Search method
    public function search()
    {
        $keyword = $this->request->getGet('q');
        $model = new StudentModel();

        if ($keyword) {
            $data['students'] = $model->like('name', $keyword)
                                      ->orLike('email', $keyword)
                                      ->orLike('course', $keyword)
                                      ->findAll();
        } else {
            $data['students'] = $model->findAll();
        }

        return view('students/index', $data);
    }
}
