<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Categorie extends \App\Entity\Categorie implements \Doctrine\ORM\Proxy\InternalProxy
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
        "\0".parent::class."\0".'categorieParente' => [parent::class, 'categorieParente', null],
        "\0".parent::class."\0".'categories' => [parent::class, 'categories', null],
        "\0".parent::class."\0".'descriptioncat' => [parent::class, 'descriptioncat', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'nomcat' => [parent::class, 'nomcat', null],
        "\0".parent::class."\0".'produits' => [parent::class, 'produits', null],
        'categorieParente' => [parent::class, 'categorieParente', null],
        'categories' => [parent::class, 'categories', null],
        'descriptioncat' => [parent::class, 'descriptioncat', null],
        'id' => [parent::class, 'id', null],
        'nomcat' => [parent::class, 'nomcat', null],
        'produits' => [parent::class, 'produits', null],
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
