<?php
/**
 * Undirected vertex.
 */
namespace GraphDS\Vertex;

/**
 * Class defining an undirected vertex object.
 */
class UndirectedVertex extends Vertex
{
    /**
     * Variable holding the value of this vertex.
     *
     * @var mixed
     */
    public $value;
    /**
     * Array holding references to all neighboring vertices of this vertex.
     *
     * @var array
     */
    public $neighbors;

    /**
     * Adds a neighboring, undirected vertex to this vertex.
     *
     * @param string $vertex ID of vertex
     */
    public function addNeighbor($vertex)
    {
        $this->neighbors[] = $vertex;
    }

    /**
     * Returns an array of all neighboring vertices of this vertex.
     *
     * @return array Array of all neighboring vertices of this vertex
     */
    public function getNeighbors()
    {
        return $this->neighbors;
    }

    /**
     * Checks if a given vertex is adjacent to this vertex.
     *
     * @param string $vertex ID of vertex
     *
     * @return bool Whether given vertex is adjacent to this vertex
     */
    public function adjacent($vertex)
    {
        return in_array($vertex, $this->neighbors);
    }
}
