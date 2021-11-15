<?php

namespace App\Services;

use App\Repositories\RequestRepository;
use Illuminate\Database\Eloquent\Collection;

class RequestService extends BaseService
{
    private $requestRepository;

    public function __construct(RequestRepository $requestRepository)
    {
        $this->requestRepository = $requestRepository;
    }

    /**
     * Get all users
     *
     * @return Collection
     */
    public function getAllRequests(): Collection
    {
        return $this->requestRepository->with('user', 'manager')->where('status', 1)->get();
    }
    public function getWaitingRequests(): Collection
    {
        return $this->requestRepository->with('user', 'manager')->where('status', 0)->get();
    }
    public function appprove($id)
    {
        $rs = $this->requestRepository->find($id);
        return $rs->update(['status' => 1]);
    }
    public function deny($id)
    {
        $this->requestRepository->delete($id);
    }
}
