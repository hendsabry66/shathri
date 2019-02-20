<?php

namespace App\DataTables;

use App\User;
use Yajra\DataTables\Services\DataTable;

class UsersDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables($query)->addColumn('action', 'admin.users.action')->editColumn('activation', function($query){
                if($query->activation == 1){
                    return '<span class="label label-success ">'.__('admin.active').'</span>';
                }else{
                    return '<span class="label label-danger">'.__('admin.deactive').'</span>';
                }
            })->rawColumns(['action','activation']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(User $model)
    {
        
        return $model->newQuery()->select('id', 'name','email', 'phone', 'birth_date','academic_qualifications','activation');
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->parameters([
                'dom'     => 'Blfrtip',
                'order'   => [[0, 'desc']],
                "lengthMenu" => [[10, 25, 50, -1], [10, 25, 50, "All"]],
               // 'buttons'      => ['export', 'print', 'create'],
                'buttons'      => [],
                'language' => ['url' => asset('ar-datatable.json')],

                'responsive'=>true,
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'id'=>['name' => 'id' ,'data' => 'id' ,'title' => '#  '],
            'name'=>['name' => 'name' ,'data' => 'name' ,'title' => __('admin.name')],
            'email'=>['name' => 'email' ,'data' => 'email' ,'title' => __('admin.email')],
            'phone'=>['name' => 'phone' ,'data' => 'phone' ,'title' => __('admin.phone')],
            'birth_date'=>['name' => 'birth_date' ,'data' => 'birth_date' ,'title' => __('admin.birth_date')],
            'academic_qualifications'=>['name' => 'academic_qualifications' ,'data' => 'academic_qualifications' ,'title' => __('admin.academic_qualifications')],
            'activation'=>['name' => 'activation' ,'data' => 'activation' ,'title' => __('admin.activation')],
            'action'=>[ 'exportable' => false, 'printable'  => false, 'searchable' => false, 'orderable'  => false, 'title' => __('admin.action')]
            
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Users_' . date('YmdHis');
    }
}
