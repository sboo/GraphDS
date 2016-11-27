<?php
/**
 * Directed vertex
 */

namespace GraphDS\Vertex;

/**
 * Class defining a directed vertex object
 */
class DirectedVertex extends Vertex
{
    /**
     * Variable holding the value of this vertex
     * @var mixed
     */
    public $value;
    /**
     * Array holding references to all neighboring vertices of this vertex
     * @var array
     */
    public $neighbors;

    /**
     * Constructor for DirectedVertex object
     */
    public function __construct() {
        parent::__construct();
        $this->neighbors['in'] = array();
        $this->neighbors['out'] = array();
    }

    /**
     * Adds a neighboring, incoming, directed vertex to this vertex
     * @param string $v ID of the vertex
     */
    public function addInNeighbor($v) {
        $this->neighbors['in'][] = $v;
    }

    /**
     * Returns an array of all incoming neighbor vertices
     * @return array Array of all incoming neighbor vertices
     */
    public function getInNeighbors() {
        return $this->neighbors['in'];
    }

    /**
     * Adds a neighboring, outgoing, directed vertex to this vertex
     * @param string $v ID of the vertex
     */
    public function addOutNeighbor($v) {
        $this->neighbors['out'][] = $v;
    }

    /**
     * Returns an array of all outgoing neighbor vertices
     * @return array Array of all outgoing neighbor vertices
     */
    public function getOutNeighbors() {
        return $this->neighbors['out'];
    }

    /**
     * Returns an array of all neighboring vertices
     * @return array Array of all neighboring vertices
     */
    public function getNeighbors() {
        return $this->neighbors;
    }

    /**
     * Returns the number of incoming neighbor vertices (indegree)
     * @return int Number of incoming vertices
     */
    public function getIndegree() {
        return count($this->neighbors['in']);
    }

    /**
     * Returns the number of outgoing neighbor vertices (outdegree)
     * @return int Number of outgoing vertices
     */
    public function getOutdegree() {
        return count($this->neighbors['out']);
    }

    /**
     * Checks if a given vertex is an incoming neighbor of this vertex
     * @param  string  $v ID of vertex
     * @return boolean    Whether given vertex is an incoming neighbor of this vertex
     */
    public function inAdjacent($v) {
        return in_array($v, $this->neighbors['in']);
    }

    /**
     * Checks if a given vertex is an outgoing neighbor of this vertex
     * @param  string  $v ID of vertex
     * @return boolean    Whether given vertex is an outgoing neighbor of this vertex
     */
    public function outAdjacent($v) {
        return in_array($v, $this->neighbors['out']);
    }

    /**
     * Checks if a given vertex is adjacent to this vertex
     * @param  string  $v ID of vertex
     * @return boolean    Whether given vertex is adjacent to this vertex
     */
    public function adjacent($v) {
        return in_array($v, $this->neighbors['in']) || in_array($v, $this->neighbors['out']);
    }
}
