<?php
/**
 *
 *
 * Created by PhpStorm
 * User: Alex
 * Date: 2021-11-20 04:40
 * E-mail: <276558492@qq.com>
 */
declare(strict_types=1);

namespace Pudongping\JsonRpc\Contract;

interface CalculatorServiceInterface
{

    /**
     * 定义一个加法
     *
     * @param int $a
     * @param int $b
     * @return int
     */
    public function add(int $a, int $b): int;

    /**
     * 定义一个减法
     *
     * @param int $a
     * @param int $b
     * @return int
     */
    public function minus(int $a, int $b): int;

}