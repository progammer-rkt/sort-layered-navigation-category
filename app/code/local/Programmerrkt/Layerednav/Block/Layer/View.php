<?php

class Programmerrkt_Layerednav_Block_Layer_View extends Mage_Catalog_Block_Layer_View {

	 /**
     * Get all layer filters
     *
     * This method Overwrites getFilter() method of class Mage_Catalog_Block_Layer_View
     *
     * Adds attribute filter only when category leve is 4
     *
     * @return array
     */
	public function getFilters()
    {
        $filters = array();
        if ($categoryFilter = $this->_getCategoryFilter()) {
            $filters[] = $categoryFilter;

        }

		    $filterableAttributes = $this->_getFilterableAttributes();
		    foreach ($filterableAttributes as $attribute) {
		        $filters[] = $this->getChild($attribute->getAttributeCode() . '_filter');
		    }

        

        return $filters;
    }
}