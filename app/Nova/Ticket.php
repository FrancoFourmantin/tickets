<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Http\Requests\NovaRequest;

class Ticket extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Ticket::class;


    public static function label()
    {
        return 'Tickets';
    }

    public static function singularLabel()
    {
        return 'Ticket';
    }

    public static function uriKey()
    {
        return 'tickets';
    }

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'nombre';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'nombre',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),

            BelongsTo::make('Proyecto' , 'proyecto' , Proyecto::class)
                ->filterable(),

            Text::make('Nombre'),

            Textarea::make('Descripción' , 'descripcion'),

            BelongsTo::make('Estado' , 'estado' , EstadoTicket::class)
                ->filterable(),

            BelongsTo::make('Severidad' , 'severidad' , SeveridadTicket::class)
                ->filterable(),

            DateTime::make('Creado el' , 'created_at')
                ->filterable(),

            DateTime::make('Actualizado el' ,  'updated_at')
                ->filterable()

        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }
}
