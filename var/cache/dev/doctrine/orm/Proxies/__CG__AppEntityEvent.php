<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Event extends \App\Entity\Event implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as private;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    public function __load(): void
    {
        $this->initializeLazyObject();
    }
    

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'commentaires' => [parent::class, 'commentaires', null],
        "\0".parent::class."\0".'date_debut' => [parent::class, 'date_debut', null],
        "\0".parent::class."\0".'date_fin' => [parent::class, 'date_fin', null],
        "\0".parent::class."\0".'descriptionevents' => [parent::class, 'descriptionevents', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'image1events' => [parent::class, 'image1events', null],
        "\0".parent::class."\0".'image2events' => [parent::class, 'image2events', null],
        "\0".parent::class."\0".'titreevents' => [parent::class, 'titreevents', null],
        'commentaires' => [parent::class, 'commentaires', null],
        'date_debut' => [parent::class, 'date_debut', null],
        'date_fin' => [parent::class, 'date_fin', null],
        'descriptionevents' => [parent::class, 'descriptionevents', null],
        'id' => [parent::class, 'id', null],
        'image1events' => [parent::class, 'image1events', null],
        'image2events' => [parent::class, 'image2events', null],
        'titreevents' => [parent::class, 'titreevents', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}
