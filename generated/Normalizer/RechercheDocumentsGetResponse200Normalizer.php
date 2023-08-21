<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\RechercheDocumentsGetResponse200;
use Qdequippe\Pappers\Api\Runtime\Normalizer\CheckArray;
use Qdequippe\Pappers\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class RechercheDocumentsGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Qdequippe\\Pappers\\Api\\Model\\RechercheDocumentsGetResponse200' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'Qdequippe\\Pappers\\Api\\Model\\RechercheDocumentsGetResponse200' === $data::class;
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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new RechercheDocumentsGetResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('resultats', $data) && null !== $data['resultats']) {
            $values = [];
            foreach ($data['resultats'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Qdequippe\\Pappers\\Api\\Model\\RechercheDocumentsGetResponse200ResultatsItem', 'json', $context);
            }
            $object->setResultats($values);
            unset($data['resultats']);
        } elseif (\array_key_exists('resultats', $data) && null === $data['resultats']) {
            $object->setResultats(null);
        }
        if (\array_key_exists('total', $data) && null !== $data['total']) {
            $object->setTotal($data['total']);
            unset($data['total']);
        } elseif (\array_key_exists('total', $data) && null === $data['total']) {
            $object->setTotal(null);
        }
        if (\array_key_exists('page', $data) && null !== $data['page']) {
            $object->setPage($data['page']);
            unset($data['page']);
        } elseif (\array_key_exists('page', $data) && null === $data['page']) {
            $object->setPage(null);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
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
        if ($object->isInitialized('resultats') && null !== $object->getResultats()) {
            $values = [];
            foreach ($object->getResultats() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['resultats'] = $values;
        }
        if ($object->isInitialized('total') && null !== $object->getTotal()) {
            $data['total'] = $object->getTotal();
        }
        if ($object->isInitialized('page') && null !== $object->getPage()) {
            $data['page'] = $object->getPage();
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['Qdequippe\\Pappers\\Api\\Model\\RechercheDocumentsGetResponse200' => false];
    }
}
