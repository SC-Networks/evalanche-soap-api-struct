<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\LeadPage;

/**
 * Contains information about the configuration of a specific leadpage
 */
class LeadpageConfiguration implements LeadpageConfigurationInterface
{
    /** @var string|null */
    protected $macroLibrary;

    /** @var string|null */
    protected $inputfield0;

    /** @var string|null */
    protected $inputfield1;

    /** @var string|null */
    protected $inputfield2;

    /** @var string|null */
    protected $inputfield3;

    /** @var string|null */
    protected $inputfield4;

    /** @var string|null */
    protected $inputfield5;

    /** @var string|null */
    protected $inputfield6;

    /** @var string|null */
    protected $inputfield7;

    /** @var string|null */
    protected $inputfield8;

    /** @var string|null */
    protected $inputfield9;

    /** @var string|null */
    protected $textarea0;

    /** @var string|null */
    protected $textarea1;

    /** @var string|null */
    protected $textarea2;

    /** @var string|null */
    protected $textarea3;

    /** @var string|null */
    protected $textarea4;

    /** @var string|null */
    protected $textarea5;

    /** @var string|null */
    protected $textarea6;

    /** @var string|null */
    protected $textarea7;

    /** @var string|null */
    protected $textarea8;

    /** @var string|null */
    protected $textarea9;

    /** @var string|null */
    protected $htmlarea0;

    /** @var string|null */
    protected $htmlarea1;

    /** @var string|null */
    protected $htmlarea2;

    /** @var string|null */
    protected $htmlarea3;

    /** @var string|null */
    protected $htmlarea4;

    /** @var string|null */
    protected $htmlarea5;

    /** @var string|null */
    protected $htmlarea6;

    /** @var string|null */
    protected $htmlarea7;

    /** @var string|null */
    protected $htmlarea8;

    /** @var string|null */
    protected $htmlarea9;

    public function __construct(
        string $macroLibrary = null,
        string $inputfield0 = null,
        string $inputfield1 = null,
        string $inputfield2 = null,
        string $inputfield3 = null,
        string $inputfield4 = null,
        string $inputfield5 = null,
        string $inputfield6 = null,
        string $inputfield7 = null,
        string $inputfield8 = null,
        string $inputfield9 = null,
        string $textarea0 = null,
        string $textarea1 = null,
        string $textarea2 = null,
        string $textarea3 = null,
        string $textarea4 = null,
        string $textarea5 = null,
        string $textarea6 = null,
        string $textarea7 = null,
        string $textarea8 = null,
        string $textarea9 = null,
        string $htmlarea0 = null,
        string $htmlarea1 = null,
        string $htmlarea2 = null,
        string $htmlarea3 = null,
        string $htmlarea4 = null,
        string $htmlarea5 = null,
        string $htmlarea6 = null,
        string $htmlarea7 = null,
        string $htmlarea8 = null,
        string $htmlarea9 = null,
    ) {
        $this->macroLibrary = $macroLibrary;
        $this->inputfield0 = $inputfield0;
        $this->inputfield1 = $inputfield1;
        $this->inputfield2 = $inputfield2;
        $this->inputfield3 = $inputfield3;
        $this->inputfield4 = $inputfield4;
        $this->inputfield5 = $inputfield5;
        $this->inputfield6 = $inputfield6;
        $this->inputfield7 = $inputfield7;
        $this->inputfield8 = $inputfield8;
        $this->inputfield9 = $inputfield9;
        $this->textarea0 = $textarea0;
        $this->textarea1 = $textarea1;
        $this->textarea2 = $textarea2;
        $this->textarea3 = $textarea3;
        $this->textarea4 = $textarea4;
        $this->textarea5 = $textarea5;
        $this->textarea6 = $textarea6;
        $this->textarea7 = $textarea7;
        $this->textarea8 = $textarea8;
        $this->textarea9 = $textarea9;
        $this->htmlarea0 = $htmlarea0;
        $this->htmlarea1 = $htmlarea1;
        $this->htmlarea2 = $htmlarea2;
        $this->htmlarea3 = $htmlarea3;
        $this->htmlarea4 = $htmlarea4;
        $this->htmlarea5 = $htmlarea5;
        $this->htmlarea6 = $htmlarea6;
        $this->htmlarea7 = $htmlarea7;
        $this->htmlarea8 = $htmlarea8;
        $this->htmlarea9 = $htmlarea9;
    }

    public function getMacroLibrary(): ?string
    {
        return $this->macroLibrary;
    }

    public function setMacroLibrary(string $macroLibrary): LeadpageConfiguration
    {
        $this->macroLibrary = $macroLibrary;
        return $this;
    }

    public function getInputfield0(): ?string
    {
        return $this->inputfield0;
    }

    public function setInputfield0(string $inputfield0): LeadpageConfiguration
    {
        $this->inputfield0 = $inputfield0;
        return $this;
    }

    public function getInputfield1(): ?string
    {
        return $this->inputfield1;
    }

    public function setInputfield1(string $inputfield1): LeadpageConfiguration
    {
        $this->inputfield1 = $inputfield1;
        return $this;
    }

    public function getInputfield2(): ?string
    {
        return $this->inputfield2;
    }

    public function setInputfield2(string $inputfield2): LeadpageConfiguration
    {
        $this->inputfield2 = $inputfield2;
        return $this;
    }

    public function getInputfield3(): ?string
    {
        return $this->inputfield3;
    }

    public function setInputfield3(string $inputfield3): LeadpageConfiguration
    {
        $this->inputfield3 = $inputfield3;
        return $this;
    }

    public function getInputfield4(): ?string
    {
        return $this->inputfield4;
    }

    public function setInputfield4(string $inputfield4): LeadpageConfiguration
    {
        $this->inputfield4 = $inputfield4;
        return $this;
    }

    public function getInputfield5(): ?string
    {
        return $this->inputfield5;
    }

    public function setInputfield5(string $inputfield5): LeadpageConfiguration
    {
        $this->inputfield5 = $inputfield5;
        return $this;
    }

    public function getInputfield6(): ?string
    {
        return $this->inputfield6;
    }

    public function setInputfield6(string $inputfield6): LeadpageConfiguration
    {
        $this->inputfield6 = $inputfield6;
        return $this;
    }

    public function getInputfield7(): ?string
    {
        return $this->inputfield7;
    }

    public function setInputfield7(string $inputfield7): LeadpageConfiguration
    {
        $this->inputfield7 = $inputfield7;
        return $this;
    }

    public function getInputfield8(): ?string
    {
        return $this->inputfield8;
    }

    public function setInputfield8(string $inputfield8): LeadpageConfiguration
    {
        $this->inputfield8 = $inputfield8;
        return $this;
    }

    public function getInputfield9(): ?string
    {
        return $this->inputfield9;
    }

    public function setInputfield9(string $inputfield9): LeadpageConfiguration
    {
        $this->inputfield9 = $inputfield9;
        return $this;
    }

    public function getTextarea0(): ?string
    {
        return $this->textarea0;
    }

    public function setTextarea0(string $textarea0): LeadpageConfiguration
    {
        $this->textarea0 = $textarea0;
        return $this;
    }

    public function getTextarea1(): ?string
    {
        return $this->textarea1;
    }

    public function setTextarea1(string $textarea1): LeadpageConfiguration
    {
        $this->textarea1 = $textarea1;
        return $this;
    }

    public function getTextarea2(): ?string
    {
        return $this->textarea2;
    }

    public function setTextarea2(string $textarea2): LeadpageConfiguration
    {
        $this->textarea2 = $textarea2;
        return $this;
    }

    public function getTextarea3(): ?string
    {
        return $this->textarea3;
    }

    public function setTextarea3(string $textarea3): LeadpageConfiguration
    {
        $this->textarea3 = $textarea3;
        return $this;
    }

    public function getTextarea4(): ?string
    {
        return $this->textarea4;
    }

    public function setTextarea4(string $textarea4): LeadpageConfiguration
    {
        $this->textarea4 = $textarea4;
        return $this;
    }

    public function getTextarea5(): ?string
    {
        return $this->textarea5;
    }

    public function setTextarea5(string $textarea5): LeadpageConfiguration
    {
        $this->textarea5 = $textarea5;
        return $this;
    }

    public function getTextarea6(): ?string
    {
        return $this->textarea6;
    }

    public function setTextarea6(string $textarea6): LeadpageConfiguration
    {
        $this->textarea6 = $textarea6;
        return $this;
    }

    public function getTextarea7(): ?string
    {
        return $this->textarea7;
    }

    public function setTextarea7(string $textarea7): LeadpageConfiguration
    {
        $this->textarea7 = $textarea7;
        return $this;
    }

    public function getTextarea8(): ?string
    {
        return $this->textarea8;
    }

    public function setTextarea8(string $textarea8): LeadpageConfiguration
    {
        $this->textarea8 = $textarea8;
        return $this;
    }

    public function getTextarea9(): ?string
    {
        return $this->textarea9;
    }

    public function setTextarea9(string $textarea9): LeadpageConfiguration
    {
        $this->textarea9 = $textarea9;
        return $this;
    }

    public function getHtmlarea0(): ?string
    {
        return $this->htmlarea0;
    }

    public function setHtmlarea0(string $htmlarea0): LeadpageConfiguration
    {
        $this->htmlarea0 = $htmlarea0;
        return $this;
    }

    public function getHtmlarea1(): ?string
    {
        return $this->htmlarea1;
    }

    public function setHtmlarea1(string $htmlarea1): LeadpageConfiguration
    {
        $this->htmlarea1 = $htmlarea1;
        return $this;
    }

    public function getHtmlarea2(): ?string
    {
        return $this->htmlarea2;
    }

    public function setHtmlarea2(string $htmlarea2): LeadpageConfiguration
    {
        $this->htmlarea2 = $htmlarea2;
        return $this;
    }

    public function getHtmlarea3(): ?string
    {
        return $this->htmlarea3;
    }

    public function setHtmlarea3(string $htmlarea3): LeadpageConfiguration
    {
        $this->htmlarea3 = $htmlarea3;
        return $this;
    }

    public function getHtmlarea4(): ?string
    {
        return $this->htmlarea4;
    }

    public function setHtmlarea4(string $htmlarea4): LeadpageConfiguration
    {
        $this->htmlarea4 = $htmlarea4;
        return $this;
    }

    public function getHtmlarea5(): ?string
    {
        return $this->htmlarea5;
    }

    public function setHtmlarea5(string $htmlarea5): LeadpageConfiguration
    {
        $this->htmlarea5 = $htmlarea5;
        return $this;
    }

    public function getHtmlarea6(): ?string
    {
        return $this->htmlarea6;
    }

    public function setHtmlarea6(string $htmlarea6): LeadpageConfiguration
    {
        $this->htmlarea6 = $htmlarea6;
        return $this;
    }

    public function getHtmlarea7(): ?string
    {
        return $this->htmlarea7;
    }

    public function setHtmlarea7(string $htmlarea7): LeadpageConfiguration
    {
        $this->htmlarea7 = $htmlarea7;
        return $this;
    }

    public function getHtmlarea8(): ?string
    {
        return $this->htmlarea8;
    }

    public function setHtmlarea8(string $htmlarea8): LeadpageConfiguration
    {
        $this->htmlarea8 = $htmlarea8;
        return $this;
    }

    public function getHtmlarea9(): ?string
    {
        return $this->htmlarea9;
    }

    public function setHtmlarea9(string $htmlarea9): LeadpageConfiguration
    {
        $this->htmlarea9 = $htmlarea9;
        return $this;
    }
}
