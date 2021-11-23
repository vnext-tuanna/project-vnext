<?php

namespace App\Services;

use App\Repositories\RequestRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;

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
        return $this->requestRepository->with('user', 'manager')->where('manager_id', Auth::guard('manager')->id()) ->where('status', 1)->get();
    }
    public function getWaitingRequests(): Collection
    {
        return $this->requestRepository->with('user', 'manager')->where('status', 0)->where('manager_id', Auth::guard('manager')->id())->get();
    }
    public function appprove($id)
    {
        $rs = $this->requestRepository->find($id);
        return $rs->update(['status' => 1]);
    }
    public function deny($id)
    {
        $rs = $this->requestRepository->find($id);
        return $rs->update(['status' => 2]);
    }
    public function getRequestById($id)
    {
        return $this->requestRepository->with('user', 'manager')->find($id);
    }
}
