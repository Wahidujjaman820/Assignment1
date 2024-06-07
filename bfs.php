<?php
class Graph {
    private $adjacencyList;

    public function __construct() {
        $this->adjacencyList = array();
    }

    // Add an edge to the graph
    public function addEdge($vertex, $edge) {
        if (!isset($this->adjacencyList[$vertex])) {
            $this->adjacencyList[$vertex] = array();
        }
        $this->adjacencyList[$vertex][] = $edge;
    }

    // Perform BFS
    public function bfs($startVertex) {
        $visited = array();
        $queue = array();
        $result = array();

        // Initialize the queue with the start vertex
        array_push($queue, $startVertex);
        $visited[$startVertex] = true;

        while (!empty($queue)) {
            $currentVertex = array_shift($queue);
            $result[] = $currentVertex;

            // Get all adjacent vertices of the dequeued vertex
            foreach ($this->adjacencyList[$currentVertex] as $adjVertex) {
                if (!isset($visited[$adjVertex])) {
                    array_push($queue, $adjVertex);
                    $visited[$adjVertex] = true;
                }
            }
        }

        return $result;
    }
}

// Example usage
$graph = new Graph();
$graph->addEdge(0, 1);
$graph->addEdge(0, 2);
$graph->addEdge(1, 2);
$graph->addEdge(2, 0);
$graph->addEdge(2, 3);
$graph->addEdge(3, 3);

$startVertex = 2;
$result = $graph->bfs($startVertex);

echo "Breadth-First Search starting from vertex $startVertex: ";
echo implode(" -> ", $result);
?>
