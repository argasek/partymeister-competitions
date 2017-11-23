<?php

namespace Partymeister\Competitions\Grids;

use Motor\Backend\Grid\Grid;
use Partymeister\Competitions\Grid\Renderers\CompetitionTypeRenderer;

class CompetitionTypeGrid extends Grid
{

    protected function setup()
    {
        $this->addColumn('name', trans('motor-backend::backend/global.name'), true);
        $this->addColumn('properties', trans('partymeister-competitions::backend/competition_types.properties'))->renderer(CompetitionTypeRenderer::class);
        $this->setDefaultSorting('name', 'ASC');
        $this->addEditAction(trans('motor-backend::backend/global.edit'), 'backend.competition_types.edit');
        $this->addDeleteAction(trans('motor-backend::backend/global.delete'), 'backend.competition_types.destroy');
    }
}
