<?php
interface Reader
{
		public function read();
}

interface Writer
{
		public function write($value);
}

class Configure implements Reader, Writer
{
		public function read()
		{
				// read
		}

		public function write($value)
		{
				// write
		}
}

$conf = new Configure();
