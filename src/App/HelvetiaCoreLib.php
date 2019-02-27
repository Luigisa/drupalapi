<?php

namespace Helvetia\CoreLib\App;

class HelvetiaCoreLib
{

    /**
     * @var string
     */
    private $serverUri;

    /**
     * HelvetiaCore constructor.
     *
     * @param string $serverUri
     * @param DateProvider $dateProvider
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
