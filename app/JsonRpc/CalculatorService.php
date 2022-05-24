<?php
declare(strict_types=1);
namespace App\JsonRpc;
use Hyperf\RpcServer\Annotation\RpcService;
/**
 * Class CalculatorService
 * 注意，如希望通过服务中心来管理服务，需在注解内增加 publishTo 属性
 * @package App\JsonRpc
 * @RpcService(name="CalculatorService", protocol="jsonrpc", server="jsonrpc")
 */
class CalculatorService implements CalculatorServiceInterface
{
    // 实现一个加法方法，这里简单的认为参数都是 int 类型
    public function add(int $a, int $b): int
    {
        // 这里是服务方法的具体实现
        return $a + $b;
    }
}