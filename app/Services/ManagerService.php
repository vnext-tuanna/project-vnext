<?php

namespace App\Services;

use App\Repositories\ManagerRepository;
use Illuminate\Database\Eloquent\Collection;

class ManagerService extends BaseService
{
    private $managerRepository;

    public function __construct(ManagerRepository $managerRepository)
    {
        $this->managerRepository = $managerRepository;
    }

    /**
     * Get all users
     *
     * @return Collection
     */
    public function getAllManager(): Collection
    {
        return $this->managerRepository->with('division', 'position', 'managerskill')->all();
    }
    public function edit($id)
    {
        return $this->managerRepository->with('division', 'position', 'skills', 'managerskill')->where('id', $id)->get();
    }
    public function update($id, $data)
    {
        $managers = $this->managerRepository->find($id);
        return $managers->update($data);
    }
    public function delete($id)
    {
        return $this->managerRepository->delete($id);
    }
    public function destroy($id)
    {
        $managers = $this->managerRepository->find($id);
        return $managers->forceDelete($managers);
    }

    public function getManagerServiceById($id)
    {
        return $this->managerRepository->with('division', 'position')->find($id);
    }
    public function storeManager($data)
    {
        return $this->managerRepository->create($data);
    }
}
