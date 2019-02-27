<?php

namespace Helvetia\CoreLib\App;

class HelvetiaCore
{

    /**
     * @var string
     */
    private $serverUri;

    /**
     * HelvetiaCore constructor.
     *
     * @param string $serverUri
     */
    public function __construct(string $serverUri)
    {
        $this->serverUri = $serverUri;
    }

    /**
     * @param string $serverUri
     *
     * @return HelvetiaCore
     */
    public static function build(string $serverUri): HelvetiaCore
    {
        return new self($serverUri);
    }

}
