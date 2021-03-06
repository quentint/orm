<?php

declare(strict_types=1);

namespace Doctrine\Tests\Models\CMS;

use Doctrine\Common\Collections\Collection;

/**
 * Description of CmsTag
 *
 * @Entity
 * @Table(name="cms_tags")
 */
class CmsTag
{
    /**
     * @var int
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    public $id;
    /** @Column(length=50, name="tag_name", nullable=true) */
    public $name;

    /**
     * @psalm-var Collection<int, CmsUser>
     * @ManyToMany(targetEntity="CmsUser", mappedBy="tags")
     */
    public $users;

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function addUser(CmsUser $user): void
    {
        $this->users[] = $user;
    }

    public function getUsers()
    {
        return $this->users;
    }
}
