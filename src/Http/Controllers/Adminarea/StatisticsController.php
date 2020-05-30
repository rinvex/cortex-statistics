<?php

declare(strict_types=1);

namespace Cortex\Statistics\Http\Controllers\Adminarea;

use Cortex\Statistics\DataTables\Adminarea\PathsDataTable;
use Cortex\Statistics\DataTables\Adminarea\AgentsDataTable;
use Cortex\Statistics\DataTables\Adminarea\GeoipsDataTable;
use Cortex\Statistics\DataTables\Adminarea\RoutesDataTable;
use Cortex\Foundation\Http\Controllers\AuthorizedController;
use Cortex\Statistics\DataTables\Adminarea\DevicesDataTable;
use Cortex\Statistics\DataTables\Adminarea\RequestsDataTable;
use Cortex\Statistics\DataTables\Adminarea\PlatformsDataTable;

class StatisticsController extends AuthorizedController
{
    /**
     * {@inheritdoc}
     */
    protected $resource = 'list-statistics';

    /**
     * {@inheritdoc}
     */
    protected $resourceMethodsWithoutModels = [
        'agents',
        'geoips',
        'devices',
        'paths',
        'platforms',
        'requests',
        'routes',
    ];

    /**
     * Show statistics index.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('cortex/foundation::adminarea.pages.index');
    }

    /**
     * List all agents.
     *
     * @param \Cortex\Statistics\DataTables\Adminarea\AgentsDataTable $agentsDataTable
     *
     * @return \Illuminate\Http\JsonResponse|\Illuminate\View\View
     */
    public function agents(AgentsDataTable $agentsDataTable)
    {
        return $agentsDataTable->with([
            'id' => 'adminarea-statistics-agents',
        ])->render('cortex/foundation::adminarea.pages.datatable-index');
    }

    /**
     * List all geoips.
     *
     * @param \Cortex\Statistics\DataTables\Adminarea\GeoipsDataTable $geoipsDataTable
     *
     * @return \Illuminate\Http\JsonResponse|\Illuminate\View\View
     */
    public function geoips(GeoipsDataTable $geoipsDataTable)
    {
        return $geoipsDataTable->with([
            'id' => 'adminarea-statistics-geoips',
        ])->render('cortex/foundation::adminarea.pages.datatable-index');
    }

    /**
     * List all devices.
     *
     * @param \Cortex\Statistics\DataTables\Adminarea\DevicesDataTable $devicesDataTable
     *
     * @return \Illuminate\Http\JsonResponse|\Illuminate\View\View
     */
    public function devices(DevicesDataTable $devicesDataTable)
    {
        return $devicesDataTable->with([
            'id' => 'adminarea-statistics-devices',
        ])->render('cortex/foundation::adminarea.pages.datatable-index');
    }

    /**
     * List all paths.
     *
     * @param \Cortex\Statistics\DataTables\Adminarea\PathsDataTable $pathsDataTable
     *
     * @return \Illuminate\Http\JsonResponse|\Illuminate\View\View
     */
    public function paths(PathsDataTable $pathsDataTable)
    {
        return $pathsDataTable->with([
            'id' => 'adminarea-statistics-paths',
        ])->render('cortex/foundation::adminarea.pages.datatable-index');
    }

    /**
     * List all platforms.
     *
     * @param \Cortex\Statistics\DataTables\Adminarea\PlatformsDataTable $platformsDataTable
     *
     * @return \Illuminate\Http\JsonResponse|\Illuminate\View\View
     */
    public function platforms(PlatformsDataTable $platformsDataTable)
    {
        return $platformsDataTable->with([
            'id' => 'adminarea-statistics-platforms',
        ])->render('cortex/foundation::adminarea.pages.datatable-index');
    }

    /**
     * List all requests.
     *
     * @param \Cortex\Statistics\DataTables\Adminarea\RequestsDataTable $requestsDataTable
     *
     * @return \Illuminate\Http\JsonResponse|\Illuminate\View\View
     */
    public function requests(RequestsDataTable $requestsDataTable)
    {
        return $requestsDataTable->with([
            'id' => 'adminarea-statistics-requests',
        ])->render('cortex/foundation::adminarea.pages.datatable-index');
    }

    /**
     * List all routes.
     *
     * @param \Cortex\Statistics\DataTables\Adminarea\RoutesDataTable $routesDataTable
     *
     * @return \Illuminate\Http\JsonResponse|\Illuminate\View\View
     */
    public function routes(RoutesDataTable $routesDataTable)
    {
        return $routesDataTable->with([
            'id' => 'adminarea-statistics-routes',
        ])->render('cortex/foundation::adminarea.pages.datatable-index');
    }
}
