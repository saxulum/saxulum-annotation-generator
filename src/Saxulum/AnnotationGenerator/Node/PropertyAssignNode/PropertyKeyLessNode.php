<?php

namespace Saxulum\AnnotationGenerator\Node\PropertyAssignNode;

use Saxulum\AnnotationGenerator\Node\ValueNode\AbstractValueNode;

class PropertyKeyLessNode extends AbstractPropertyNode
{
    /**
     * @var AbstractValueNode
     */
    protected $node;

    public function __construct(AbstractValueNode $node)
    {
        $this->node = $node;
    }

    /**
     * @return string
     */
    public function simplePrint()
    {
        return $this->node->simplePrint();
    }

    /**
     * @param  int    $level
     * @param  int    $tabSize
     * @return string
     */
    public function prettyPrint($level, $tabSize)
    {
        return $this->node->prettyPrint($level, $tabSize);
    }
}
