<?php

declare(strict_types=1);

/*
Sukurkite klasę HierarchyBuilder, kuri padėtų terminale vizualizuoti hierarchijos modelį.
Pvz.:
* zero (root) level node
    |_ first level node (id 0)
    |_ first level node (id 1)
        |_ second level node (id 0)
        |_ second level node (id 1)
        |_ second level node (id 2)
Metodai:
addRootNode(string $text): void - prideda root node'ą
addNode(string $text, int $parentLevel, int $parentNodeId): void - prideda node'ą tam tikrame lygyje, nurodytam parent'ui
printHierarchy(): void - spausdina hierarchiją į terminalą
removeNode(int $level, int $parentNodeId): void - pašalina tam tikrą node'ą ir jo vaikus
Apribojimai:
- Gali būti tik vienas root lygio node'as.
- Negalima pridėti node'o neegzistuojančiam parent'ui
Kodo kvietimo pavyzdys:
$hierarchyBuilder = new HierarchyBuilder();
$hierarchyBuilder->addRootNode('this is root (zero)');
$hierarchyBuilder->addNode('this is first level', 0, 0);
$hierarchyBuilder->addNode('this is first level again', 0, 0);
$hierarchyBuilder->addNode('this is second level', 1, 1);
$hierarchyBuilder->addNode('this is first level once again', 0, 0);
$hierarchyBuilder->printHierarchy();
$hierarchyBuilder->addNode('this is fifth level', 4, 0); // parent node does not exist
* this is root (zero)
    |_ this is first level
    |_ this is first level again
        |_ this is second level
    |_ this is first level once again
*/

class HierarchyBuilder
{
    private array $tree = [];

    private int $prarentlvfmax = 0;

    public function addRootNode(string $text): void
    {
        $this->tree[] = $text;
    }

    public function addNode(string $text, int $parentLevel, int $parentNodeId): void
    {

        if (empty($this->tree[0])) {
            die('No root node added. Please first ad root node!');
        }
        if ($parentLevel <=$this->prarentlvfmax) {
            if ($parentLevel == 0) {
                $this->tree[$parentLevel + 1][$parentNodeId] = [$text];
                $this->prarentlvfmax = $parentNodeId+1;
            }
            if ($parentLevel >= 1 && $parentLevel <= $this->prarentlvfmax) {
                $this->tree[1][$parentLevel - 1][$parentNodeId] = [$text];
            }
        } else {
            die('Parent level Node does not exist');
        }
    }

    public function printHierarchy(): void
    {
        echo $this->tree[0] . PHP_EOL;
        foreach ($this->tree[1] as $value1) {
            foreach ($value1 as $value2) {
                if (is_string($value2)) {
                    echo '   |_ ' . $value2 . PHP_EOL;
                } else {
                    foreach ($value2 as $value3) {
                        echo '      |_ ' . $value3 . PHP_EOL;
                    }
                }
            }
        }
    }

    public function removeNode(int $level, int $parentNodeId): void
    {
        if ($level == 0) {
            unset($this->tree[1][$parentNodeId]);
        }
        if ($level >= 1) {
            unset($this->tree[1][$level - 1][$parentNodeId]);
        }
    }
}

$hierarchyBuilder = new HierarchyBuilder();
$hierarchyBuilder->addRootNode('* this is root (zero)');
$hierarchyBuilder->addNode('this is first level', 0, 0);
$hierarchyBuilder->addNode('this is first level again', 0, 1);
$hierarchyBuilder->addNode('this is first level once again', 0, 2);
$hierarchyBuilder->addNode('this is second level', 3, 1);
$hierarchyBuilder->addNode('this is second level again', 3, 2);
$hierarchyBuilder->addNode('this is second level once again', 3, 3);
$hierarchyBuilder->addNode('this is first level once once again', 0, 3);
//$hierarchyBuilder->addNode('this is too high level',5,0);
print_r($hierarchyBuilder->printHierarchy());
$hierarchyBuilder->removeNode(3, 1);
print_r($hierarchyBuilder->printHierarchy());