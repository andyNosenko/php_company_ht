<?php


class MarkdownToHtmlConverter
{
    private $parser;

    public function __construct(ParserInterface $parser, string $version)
    {
        $this->parser = $parser;
    }

    public function convert(string $markdown): string
    {
        return '...';
    }
}