<?php

namespace App\Traits;

trait RecordAuthActivity
{
    /**
     * boot trait.
     *
     * @return void
     */
    public static function bootRecordAuthActivity()
    {
        static::updating(function ($table) {
            if ($table->hasAColumn('updated_by') && auth()->user()) {
                $table->updated_by = auth()->user()->id;
            }
            if(!auth()->user())
            {
                $table->updated_by = '1';
            }
        }); 
        
        static::creating(function ($table) {
            if ($table->hasAColumn('created_by') && $table->hasAColumn('updated_by') && auth()->user()) {
                $table->created_by = auth()->user()->id;
                $table->updated_by = auth()->user()->id;
            }
            if(!auth()->user())
            {
                $table->created_by = '1';
                $table->updated_by = '1';
            }
        });
    }

    protected function hasAColumn($column)
    {
        return $this->getConnection()
           ->getSchemaBuilder()
           ->hasColumn($this->getTable(), $column);
    }
}