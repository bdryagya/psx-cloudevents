<?php
/*
 * PSX is a open source PHP framework to develop RESTful APIs.
 * For the current version and informations visit <http://phpsx.org>
 *
 * Copyright 2010-2020 Christoph Kappestein <christoph.kappestein@gmail.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace PSX\CloudEvents;

/**
 * Builder
 *
 * @author  Christoph Kappestein <christoph.kappestein@gmail.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @link    http://phpsx.org
 */
class Builder
{
    /**
     * @var \PSX\CloudEvents\CloudEvent
     */
    private $event;

    public function __construct()
    {
        $this->event = new CloudEvent();
    }

    /**
     * @param string $type
     * @return $this
     */
    public function withType(string $type): self
    {
        $this->event->setType($type);
        return $this;
    }

    /**
     * @param string $source
     * @return $this
     */
    public function withSource(string $source): self
    {
        $this->event->setSource($source);
        return $this;
    }

    /**
     * @param string $id
     * @return $this
     */
    public function withId(string $id): self
    {
        $this->event->setId($id);
        return $this;
    }

    /**
     * @param \DateTimeInterface $time
     * @return $this
     */
    public function withTime(\DateTimeInterface $time): self
    {
        $this->event->setTime($time);
        return $this;
    }

    /**
     * @param string $contentType
     * @return $this
     */
    public function withDataContentType(string $contentType): self
    {
        $this->event->setDataContentType($contentType);
        return $this;
    }

    /**
     * @param mixed $data
     * @return $this
     */
    public function withData($data): self
    {
        $this->event->setData($data);
        return $this;
    }

    /**
     * @param array $extensions
     * @return $this
     */
    public function withExtensions(array $extensions): self
    {
        $this->event->setExtensions($extensions);
        return $this;
    }

    /**
     * @param string $name
     * @param mixed $value
     * @return $this
     */
    public function withExtension(string $name, $value): self
    {
        $this->event->addExtension($name, $value);
        return $this;
    }

    /**
     * @return \PSX\CloudEvents\CloudEvent
     */
    public function build(): CloudEvent
    {
        return clone $this->event;
    }
}
