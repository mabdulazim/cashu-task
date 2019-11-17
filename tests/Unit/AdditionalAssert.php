<?php 
namespace Tests\Unit;

trait AdditionalAssert
{
    public function assertArrayStructure(array $arrayData, array $structure)
    {
        foreach ($structure as $key => $value) 
        {
            if (is_array($value) && $key === '*') 
            {
                $this->assertIsArray($arrayData);

                foreach ($arrayData as $arrayDataItem) 
                {
                    $this->assertArrayStructure($arrayDataItem, $structure['*']);
                }
            } 
            elseif (is_array($value)) 
            {
                $this->assertArrayHasKey($key, $arrayData);

                $this->assertArrayStructure($arrayData[$key], $structure[$key]);
            } 
            else 
            {
                $this->assertArrayHasKey($value, $arrayData);
            }
        }

        return $this;
    }
}