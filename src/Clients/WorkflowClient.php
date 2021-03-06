<?php

namespace JiraApi\Clients;

use JiraApi\Clients\AbstractClient;

class WorkflowClient extends AbstractClient
{
    /**
     * Returns all workflows
     *
     * @link  https://docs.atlassian.com/jira/REST/latest/#d2e576
     *
     * @return GuzzleHttp\Message\Response
     */
    public function getAll()
    {
        return $this->getRequest('workflow');
    }
}
