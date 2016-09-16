<?php
/**
 * PHP version 5.6
 *
 * This source file is subject to the license that is bundled with this package in the file LICENSE.
 */
namespace ComPHPPuebla\DBAL\Fixture\Persister;

interface Persister
{
    /**
     * @param array $rows
     */
    public function persist(array $rows);
}
