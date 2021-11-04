<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Core\Request;
use App\Repository\ContractorRepository;
use App\Core\RedirectResponse;

class ContractorController extends Controller
{
    public function index()
    {
        /** @var ContractorRepository $contractors */
        $contractors = $this->container->get('contractor.repository')->findAll();

        return $this->getTemplate()->render('contractor/list', compact('contractors'));
    }

    public function create()
    {
        return $this->getTemplate()->render('contractor/create');
    }

    public function edit(Request $request)
    {
        $id = (int) $request->get('id');
        if (empty($id)) {
            throw new \Exception("Contractor not found with id $id");
        }

        $contractor = $this->container->get('contractor.repository')->findOne($id);

        return $this->getTemplate()->render('contractor/edit', compact('contractor'));
    }

    public function store(Request $request)
    {
        $this->processPost($request);
        $data = $request->postAll();

        /** @var ContractorRepository $saved */
        $id = $this->container->get('contractor.repository')->save($data);
        if ($id) {
            RedirectResponse::redirect("/kontrahent/edycja?id=$id");
        }

        $errors = ['Wystapił problem. Proszę spróbować poźniej.'];
        return $this->getTemplate()->render('contractor/create', compact('errors'));
    }

    public function update(Request $request)
    {
        $this->processPost($request);
        $data = $request->postAll();

        $contractor = $this->container->get('contractor.repository')->findOne((int) $data['id']);
        if (empty($contractor['id'])) {
            throw new \Exception("Contractor not found with id $id");
        }

        /** @var ContractorRepository $saved */
        $updated = $this->container->get('contractor.repository')->update($data);
        if ($updated) {
            RedirectResponse::redirect("/kontrahent/lista");
        }

        $errors = ['Wystapił problem. Proszę spróbować poźniej.'];
        return $this->getTemplate()->render('contractor/edit', compact('contractor', 'errors'));
    }

    public function delete(Request $request)
    {
        if ($request->getType() !== 'POST') {
            RedirectResponse::redirect('/', 401);
        }

        $id = (int) $request->post('id');
        if (empty($id)) {
            throw new \Exception("Contractor not found with id $id");
        }

        $this->container->get('contractor.repository')->remove($id);
        RedirectResponse::redirect("/kontrahent/lista");
    }

    private function processPost(Request $request): void
    {
        if ($request->getType() !== 'POST') {
            RedirectResponse::redirect('/', 401);
        }
    }
}