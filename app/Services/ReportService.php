<?php

namespace App\Services;

use App\Repositories\ReportRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;

class ReportService extends BaseService
{
    private $reportRepository;

    public function __construct(ReportRepository $reportRepository)
    {
        $this->reportRepository = $reportRepository;
    }

    /**
     * Get all users
     *
     * @return Collection
     */
    public function getAllReports(): Collection
    {
        return $this->reportRepository->with('user', 'manager')->all();
    }
    public function getReportsByManager(): Collection
    {
        return $this->reportRepository->with('user', 'manager')->where('manager_id', Auth::guard('manager')->id())->get();
    }
    public function delete($id)
    {
        $this->reportRepository->delete($id);
    }
}
