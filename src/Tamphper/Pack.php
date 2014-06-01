<?php

namespace Tamphper;

abstract class Pack
{
    protected $_attrName;
    protected $_possibilities;
    protected $_maxChoices;

    protected $_bitWindowWidth = null;
    protected $_itemWidnowWidth = null;
    protected $_bitset = null;

    protected $_maxGuid = null;

    protected $_meta = array();

    protected $_encoding;
    protected $_encodedBitset;

    public function __construct($attrName, $possibilities, $maxChoices)
    {
        $this->_attrName = $attrName;
        $this->_possibilities = $possibilities;
        $this->_maxChoices = $maxChoices;
    }

    public static function build($attrName, $possibilities, $maxChoices)
    {
        $numPossibilities = length($possibilities);
        if ($maxChoices * log($numPossibilities, 2) < $numPossibilities) {

        }
        else {

        }
    }

    public function toArray()
    {
        $output = array(
            'encoding'            => $this->_encoding,
            'attr_name'           => $this->_attrName,
            'possibilities'       => $this->_possibilities,
            'pack'                => $this->_encodedBitset,
            'item_window_width'   => $this->_itemWindowWidth,
            'bit_window_width'    => $this->_bitWindowWidth,
            'max_choices'         => $this->_maxChoices,
        );
        return array_merge($output, $this->_meta);
    }

    abstract public function encode($guid);

    public function finalizePack()
    {

    }
}
