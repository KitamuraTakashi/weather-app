<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * LifeSocketPinpointCode
 *
 * @ORM\Table(name="life_socket_pinpoint_code")
 * @ORM\Entity
 */
class LifeSocketPinpointCode
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="code", type="integer", nullable=false)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="pinpoint_name", type="string", length=255, nullable=false)
     */
    private $pinpointName;

    /**
     * @var string
     *
     * @ORM\Column(name="pinpoint_name_kana", type="string", length=255, nullable=false)
     */
    private $pinpointNameKana;

    /**
     * @var string
     *
     * @ORM\Column(name="pref_code", type="string", length=255, nullable=false)
     */
    private $prefCode;

    /**
     * @var string
     *
     * @ORM\Column(name="pref_name", type="string", length=255, nullable=false)
     */
    private $prefName;

    /**
     * @var string
     *
     * @ORM\Column(name="pref_name_kana", type="string", length=255, nullable=false)
     */
    private $prefNameKana;

    /**
     * @var string
     *
     * @ORM\Column(name="region_code", type="string", length=255, nullable=false)
     */
    private $regionCode;

    /**
     * @var string
     *
     * @ORM\Column(name="region_name", type="string", length=255, nullable=false)
     */
    private $regionName;

    /**
     * @var int
     *
     * @ORM\Column(name="area_code", type="integer", nullable=false)
     */
    private $areaCode;

    /**
     * @var string
     *
     * @ORM\Column(name="area_name", type="string", length=255, nullable=false)
     */
    private $areaName;

    /**
     * @var string
     *
     * @ORM\Column(name="area_name_kana", type="string", length=255, nullable=false)
     */
    private $areaNameKana;


}
