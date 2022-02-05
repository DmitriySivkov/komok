<?php


namespace App\Services;


use App\Helpers\DirectoryHelper;
use Illuminate\Pagination\LengthAwarePaginator;

class GalleryService
{
    const GALLERY_ROOT = '/Галерея';

    /**
     * @param array $filter
     * @return array|LengthAwarePaginator
     */
    public function getList($filter = [])
    {
        $tree = DirectoryHelper::makeTree(storage_path('app/public') . self::GALLERY_ROOT);

        $result = [];
        if (!$filter)
            return $result;

        foreach ($tree[$filter['age']][$filter['year']][$filter['season']][$filter['shift']] as $picName)
        {
            $result[] = self::GALLERY_ROOT . '/'
                . $filter['age']
                . '/'
                . $filter['year']
                . '/'
                . $filter['season']
                . '/'
                . $filter['shift']
                . '/'
                . $picName;
        }

        return new LengthAwarePaginator($result, count($result), 7);

    }
}
