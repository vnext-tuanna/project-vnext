<?php

namespace App\Services;

use App\Repositories\ReportRepository;
use Illuminate\Database\Eloquent\Collection;

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
        return $this->reportRepository->with('user')->all();
    }
    public function delete($id)
    {
        $this->reportRepository->delete($id);
    }
}
