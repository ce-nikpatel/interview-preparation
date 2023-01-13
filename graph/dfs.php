<?php

/* with class and object */
class DFS {
	private $visited = array();
    private $adjList = array();

    public function __construct($adjList) {
        $this->adjList = $adjList;
    }
    
	 public function dfs($start) {
        $this->visited[$start] = true;
        echo $start . " ";
        foreach($this->adjList[$start] as $vertex) {
            if(!isset($this->visited[$vertex])) {
                $this->dfs($vertex);
            }
        }
    }
}

$adjList = [
    'A' => array('B', 'C'),
    'B' => array('A', 'D', 'E'),
    'C' => array('A', 'F'),
    'D' => array('B'),
    'E' => array('B', 'F'),
    'F' => array('C', 'E')
];

$dfs = new DFS($adjList);
$dfs->dfs('A');

/* without class and object */

$adjList = [
    'A' => array('B', 'C'),
    'B' => array('A', 'D', 'E'),
    'C' => array('A', 'F'),
    'D' => array('B'),
    'E' => array('B', 'F'),
    'F' => array('C', 'E')
];
$visited = [];
function dfs($start,$adjList, &$visited) {
    $visited[$start] = true;
	echo $start . " ";
    foreach($adjList[$start] as $vertex) {
        if(!isset($visited[$vertex])) {
    		dfs($vertex,$adjList,$visited);
        }
    }
}

dfs('A',$adjList,$visited);
