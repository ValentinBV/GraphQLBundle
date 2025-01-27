<?php

declare(strict_types=1);

namespace Overblog\GraphQLBundle\Tests\Config\Parser\fixtures\annotations\Invalid;

use Overblog\GraphQLBundle\Annotation as GQL;

/**
 * @GQL\Type
 */
#[GQL\Type]
final class InvalidReturnTypeGuessing
{
    /**
     * @GQL\Field(name="guessFailed")
     * @phpstan-ignore-next-line
     */
    #[GQL\Field(name: 'guessFailed')]

    // @phpstan-ignore-next-line
    public function guessFail(int $test)
    {
        return 12;
    }
}
