<?php

declare(strict_types=1);

/*
 * This file is part of QDEQUIPPE's Slack PHP API project.
 * (c) Quentin Dequippe <quentin@dequippe.tech>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Runtime\Normalizer\CheckArray;
use Qdequippe\Pappers\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class BodaccNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Qdequippe\\Pappers\\Api\\Model\\Bodacc' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && 'Qdequippe\\Pappers\\Api\\Model\\Bodacc' === \get_class($data);
    }

    /**
     * @param mixed      $data
     * @param mixed      $class
     * @param mixed|null $format
     *
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (\array_key_exists('type', $data) && 'Création' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Qdequippe\\Pappers\\Api\\Model\\BodaccCreation', $format, $context);
        }
        if (\array_key_exists('type', $data) && 'Immatriculation' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Qdequippe\\Pappers\\Api\\Model\\BodaccImmatriculation', $format, $context);
        }
        if (\array_key_exists('type', $data) && 'Modification' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Qdequippe\\Pappers\\Api\\Model\\BodaccModification', $format, $context);
        }
        if (\array_key_exists('type', $data) && 'Vente' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Qdequippe\\Pappers\\Api\\Model\\BodaccVente', $format, $context);
        }
        if (\array_key_exists('type', $data) && 'Achat' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Qdequippe\\Pappers\\Api\\Model\\BodaccAchat', $format, $context);
        }
        if (\array_key_exists('type', $data) && 'Radiation' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Qdequippe\\Pappers\\Api\\Model\\BodaccRadiation', $format, $context);
        }
        if (\array_key_exists('type', $data) && 'Procédure collective' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Qdequippe\\Pappers\\Api\\Model\\BodaccProcedureCollective', $format, $context);
        }
        if (\array_key_exists('type', $data) && 'Dépôt des comptes' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Qdequippe\\Pappers\\Api\\Model\\BodaccDepotDesComptes', $format, $context);
        }
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Qdequippe\Pappers\Api\Model\Bodacc();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('numero_parution', $data)) {
            $object->setNumeroParution($data['numero_parution']);
            unset($data['numero_parution']);
        }
        if (\array_key_exists('date', $data)) {
            $object->setDate($data['date']);
            unset($data['date']);
        }
        if (\array_key_exists('numero_annonce', $data)) {
            $object->setNumeroAnnonce($data['numero_annonce']);
            unset($data['numero_annonce']);
        }
        if (\array_key_exists('bodacc', $data)) {
            $object->setBodacc($data['bodacc']);
            unset($data['bodacc']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        if (\array_key_exists('greffe', $data)) {
            $object->setGreffe($data['greffe']);
            unset($data['greffe']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }

        return $object;
    }

    /**
     * @param mixed      $object
     * @param mixed|null $format
     *
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getType() && 'Création' === $object->getType()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getType() && 'Immatriculation' === $object->getType()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getType() && 'Modification' === $object->getType()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getType() && 'Vente' === $object->getType()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getType() && 'Achat' === $object->getType()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getType() && 'Radiation' === $object->getType()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getType() && 'Procédure collective' === $object->getType()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getType() && 'Dépôt des comptes' === $object->getType()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if ($object->isInitialized('numeroParution') && null !== $object->getNumeroParution()) {
            $data['numero_parution'] = $object->getNumeroParution();
        }
        if ($object->isInitialized('date') && null !== $object->getDate()) {
            $data['date'] = $object->getDate();
        }
        if ($object->isInitialized('numeroAnnonce') && null !== $object->getNumeroAnnonce()) {
            $data['numero_annonce'] = $object->getNumeroAnnonce();
        }
        if ($object->isInitialized('bodacc') && null !== $object->getBodacc()) {
            $data['bodacc'] = $object->getBodacc();
        }
        if ($object->isInitialized('type') && null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if ($object->isInitialized('greffe') && null !== $object->getGreffe()) {
            $data['greffe'] = $object->getGreffe();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }

        return $data;
    }
}
