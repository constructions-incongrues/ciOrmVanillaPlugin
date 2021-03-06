<?php

/**
 * PluginLUM_ZeitgeistTable
 *
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class PluginLUM_ZeitgeistTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return PluginLUM_ZeitgeistTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('PluginLUM_Zeitgeist');
    }

    /**
     * Returns latest published Zeitgeist.
     *
     * @return LUM_Zeitgeist
     */
    public function getLatestIssue()
    {
        $q = $this->createQuery('LUM_Zeitgeist z')
            ->where('z.ispublished = 1')
            ->orderBy('z.zeitgeistid DESC')
            ->limit(1);

        return $q->fetchOne();
    }

    public function getLastIssues($count = 50)
    {
        $q = $this->createQuery('LUM_Zeitgeist z')
        ->where('z.ispublished = 1')
        ->orderBy('z.zeitgeistid DESC')
        ->limit($count);

        return $q->execute();
    }
}
