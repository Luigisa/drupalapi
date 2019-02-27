<?php

namespace Helvetia\CoreLib\App;

class HelvetiaCoreLib
{
    /**
     * @var DateProvider
     */
    private $dateProvider;

    /**
     * @var string
     */
    private $serverUri;

    /**
     * HelvetiaCore constructor.
     *
     * @param string       $serverUri
     * @param DateProvider $dateProvider
     */
    public function __construct(string $serverUri, DateProvider $dateProvider)
    {
        $this->serverUri = $serverUri;
        $this->dateProvider = $dateProvider;
    }

    /**
     * @param string       $serverUri
     * @param DateProvider $dateProvider
     *
     * @return HelvetiaCore
     */
    public static function build(
        string $serverUri,
        DateProvider $dateProvider = null
    ): HelvetiaCore {
        $serverUri = $serverUri.'/ws-crm/';

        if (is_null($dateProvider)) {
            $dateProvider = new DateProvider();
        }

        return new self($serverUri, $dateProvider);
    }

   }
