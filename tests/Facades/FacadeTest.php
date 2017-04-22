<?php



declare(strict_types=1);

namespace BrianFaust\Tests\TokenSession\Facades;

use BrianFaust\Tests\TokenSession\AbstractTestCase;
use BrianFaust\TokenSession\Facades\TokenSession;
use BrianFaust\TokenSession\Manager;
use GrahamCampbell\TestBenchCore\FacadeTrait;

class FacadeTest extends AbstractTestCase
{
    use FacadeTrait;

    protected function getFacadeAccessor()
    {
        return 'token.session';
    }

    protected function getFacadeClass()
    {
        return TokenSession::class;
    }

    protected function getFacadeRoot()
    {
        return Manager::class;
    }
}
