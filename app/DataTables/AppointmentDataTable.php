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

class AppointmentDataTable extends DataTable
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
            // ->addColumn('doctor',function($data){ return  ;})
            // ->addColumn('doctor',function($data){ return  $data->doctor->firstname??"";})
            ->editColumn('action', function($data){
                $id = $data->id;
                $actionBtn = " <button data-id=".$id."
                class='edit_appointment btn btn-primary btn-sm' data-bs-toggle='modal'
                data-bs-target='#appointment_edit_modal'><i class='fa fa-pencil-square-o'></i></button>
                <button data-id=".$id."
                class='appointment_profile btn btn-success btn-sm'><i class='fa fa-user'></i></button>
                <button data-id=".$id."
                class='del_appointment btn btn-danger btn-sm'><i class='fa fa-trash-o'></i></button>";
                return $actionBtn;
            })
            ->setRowId('id');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Appointment $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Appointment $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('appointment-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('lBfrtip')
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
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(60)
                  ->addClass('text-center'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'Appointment_' . date('YmdHis');
    }
}
