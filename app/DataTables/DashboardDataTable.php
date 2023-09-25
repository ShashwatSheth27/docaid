<?php

namespace App\DataTables;

use App\Models\Appointment;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class DashboardDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     * @return \Yajra\DataTables\EloquentDataTable
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('doctor',function($data){ return  $data->doctor->firstname??"";})
            ->addColumn('patient',function($data){ return  $data->user->firstname??"";})
            ->addColumn('phoneno',function($data){ return  $data->user->phone_no??"";})
            ->setRowId('id');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Dashboard $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Appointment $model): QueryBuilder
    {
        return $model->newQuery()->whereDate('adate',date('Y-m-d'));
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('dashboard-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('PlBfrtip')
                    ->orderBy(1)
                    ->buttons(
                        Button::make('create'),
                        Button::make('export'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns(): array
    {
        return [
            Column::make('id'),
            Column::make('doctor'),
            Column::make('patient'),
            Column::make('phoneno'),
            Column::make('adate'),
            Column::make('atime'),
            Column::make('end_time'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'Dashboard_' . date('YmdHis');
    }
}
