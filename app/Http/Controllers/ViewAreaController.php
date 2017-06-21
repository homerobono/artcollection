<?php

namespace ArtCollection\Http\Controllers;

use Illuminate\Http\Request;
use Khill\Lavacharts\Lavacharts;

class ViewAreaController extends Controller
{
    //

    public function index()
    {

        $population = \Lava::DataTable();

        $population->addDateColumn('Year')
                   ->addNumberColumn('Number of People')
                   ->addRow(['2006', 623452])
                   ->addRow(['2007', 685034])
                   ->addRow(['2008', 716845])
                   ->addRow(['2009', 757254])
                   ->addRow(['2010', 778034])
                   ->addRow(['2011', 792353])
                   ->addRow(['2012', 839657])
                   ->addRow(['2013', 842367])
                   ->addRow(['2014', 873490]);

        \Lava::AreaChart('Population', $population, [
            'title' => 'Population Growth',
            'legend' => [
                'position' => 'in'
            ]
        ]);
        return view('area');
    }
}
