<?php
declare(strict_types=1);
namespace chilimatic\lib\Traits;

/**
 * Class ObserverSubject
 * @package chilimatic\lib\Traits
 */
trait ObserverSubject
{

    /**
     * @var \SplObjectStorage
     */
    private $observerList;

    /**
     * works only once
     */
    public function initTrait()
    {
        if ($this->observerList) {
            return;
        }

        $this->observerList = new \SplObjectStorage();
    }

    /**
     * @param \SplObserver $observer
     */
    public function attach(\SplObserver $observer)
    {
        $this->observerList->attach($observer);
    }

    /**
     * @param \SplObserver $observer
     */
    public function detach(\SplObserver $observer)
    {
        $this->observerList->detach($observer);
    }

    /**
     * @var
     */
    public function notify()
    {
        foreach ($this->observerList as $observer) {
            $observer->update($this);
        }
    }
}