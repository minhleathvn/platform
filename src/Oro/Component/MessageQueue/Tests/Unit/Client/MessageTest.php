<?php
namespace Oro\Component\MessageQueue\Tests\Unit\Client;

use Oro\Component\MessageQueue\Client\Message;

class MessageTest extends \PHPUnit_Framework_TestCase
{
    public function testCouldBeConstructedWithoutAnyArguments()
    {
        new Message();
    }
    
    public function testShouldAllowGetPreviouslySetBody()
    {
        $message = new Message();
        
        $message->setBody('theBody');
        
        self::assertSame('theBody', $message->getBody());
    }

    public function testShouldAllowGetPreviouslySetContentType()
    {
        $message = new Message();

        $message->setContentType('theContentType');

        self::assertSame('theContentType', $message->getContentType());
    }

    public function testShouldAllowGetPreviouslySetDelay()
    {
        $message = new Message();

        $message->setDelay('theDelay');

        self::assertSame('theDelay', $message->getDelay());
    }

    public function testShouldAllowGetPreviouslySetExpire()
    {
        $message = new Message();

        $message->setExpire('theExpire');

        self::assertSame('theExpire', $message->getExpire());
    }

    public function testShouldAllowGetPreviouslySetPriority()
    {
        $message = new Message();

        $message->setPriority('thePriority');

        self::assertSame('thePriority', $message->getPriority());
    }

    public function testShouldAllowGetPreviouslySetMessageId()
    {
        $message = new Message();

        $message->setMessageId('theMessageId');

        self::assertSame('theMessageId', $message->getMessageId());
    }

    public function testShouldAllowGetPreviouslySetTimestamp()
    {
        $message = new Message();

        $message->setTimestamp('theTimestamp');

        self::assertSame('theTimestamp', $message->getTimestamp());
    }

    public function testShouldSetEmptyArrayAsDefaultHeadersInConstructor()
    {
        $message = new Message();

        self::assertSame([], $message->getHeaders());
    }

    public function testShouldAllowGetPreviouslySetHeaders()
    {
        $message = new Message();

        $message->setHeaders(['foo' => 'fooVal']);

        self::assertSame(['foo' => 'fooVal'], $message->getHeaders());
    }

    public function testShouldAllowGetPreviouslySetHeader()
    {
        $message = new Message();

        $message->setHeader('foo', 'fooVal');

        self::assertSame('fooVal', $message->getHeader('foo'));
    }

    public function testShouldReturnDefaultIfHeaderNotSet()
    {
        $message = new Message();

        self::assertSame('theDefault', $message->getHeader('foo', 'theDefault'));
    }

    public function testShouldSetEmptyArrayAsDefaultPropertiesInConstructor()
    {
        $message = new Message();

        self::assertSame([], $message->getProperties());
    }

    public function testShouldAllowGetPreviouslySetProperties()
    {
        $message = new Message();

        $message->setProperties(['foo' => 'fooVal']);

        self::assertSame(['foo' => 'fooVal'], $message->getProperties());
    }

    public function testShouldAllowGetPreviouslySetProperty()
    {
        $message = new Message();

        $message->setProperty('foo', 'fooVal');

        self::assertSame('fooVal', $message->getProperty('foo'));
    }

    public function testShouldReturnDefaultIfPropertyNotSet()
    {
        $message = new Message();

        self::assertSame('theDefault', $message->getProperty('foo', 'theDefault'));
    }
}
