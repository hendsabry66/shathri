<?php

namespace App\DataTables;

use App\Image;
use Yajra\DataTables\Services\DataTable;

class ImagesDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables($query)
            ->addColumn('action', 'admin.images.action')
            ->editColumn('image', function($query){
                return '<img src="'.url("/upload/".$query->image."").'" width="150" height="150">';
            })
            ->editColumn('user_id', function($query){
                return $query->user->name;
            })
            ->editColumn('approve', function($query){
                if($query->approve == 1){
                    return '<span class="label label-success ">'.__('admin.accept').'</span>';
                }else{
                    return '<span class="label label-danger ">'.__('admin.reject').'</span>';
                }
            })
            ->rawColumns(['action','image','approve']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Image $model)
    {
        return $model->newQuery()->select('id', 'image', 'user_id', 'approve');
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
           'image'=>['name' => 'image' ,'data' => 'image' ,'title' =>  __('admin.image')],
            'user_id'=>['name' => 'user_id' ,'data' => 'user_id' ,'title' =>  __('admin.name')],
            'approve'=>['name' => 'approve' ,'data' => 'approve' ,'title' =>  __('admin.approval')],
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
        return 'Images_' . date('YmdHis');
    }
}
