<?php


namespace Akademiano\Operator\Command;


interface AfterCommandInterface extends PreAfterCommandInterface
{
    const PREFIX_COMMAND_AFTER = "after.";
    /**
     * AfterCommandInterface constructor.
     * @param CommandInterface $command
     * @param mixed|\SplStack $result
     */
    public function __construct(CommandInterface $command, \SplStack $result);

    public function addResult($result);

    public function extractResult();
}
