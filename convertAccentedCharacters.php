<?php


class convertAccentedCharacters {

	// allow punctuation in output string
	private $punctuation = false;

	// make output string to lower
	private $toLower = false;

	// you can use '-' for url links, ' ' (empty space char) for another use, etc.
	// delimiter is not limited by count of characters
	private $delimiter = ' ';



	/**
	 * Set punctuation in output string
	 *
	 * @param bool $boolean
	 * @return $this
	 */
	public function punctuation(bool $boolean): convertAccentedCharacters {
		$this->punctuation = $boolean;
		return $this;
	}

	/**
	 * Set if output string to be lower-case or original
	 *
	 * @param bool $boolean
	 * @return $this
	 */
	public function toLower(bool $boolean): convertAccentedCharacters {
		$this->toLower = $boolean;
		return $this;
	}


	/**
	 * Sets delimiter in output string
	 *
	 * @param string $delimiter
	 * @return $this
	 */
	public function setDelimiter(string $delimiter): convertAccentedCharacters {
		$this->delimiter = $delimiter;
		return $this;
	}


	/**
	 * Converts text from Extended Latin to Basic Latin.
	 *
	 * @param string $text
	 * @return string
	 */
	public function getOutput(string $text): string {

		// replace all characters from Extended Latin to Basic Latin
		$ret = transliterator_transliterate('Any-Latin; Latin-ASCII', $text);

		$pattern = '/[^[:alnum:]]+/';
		if ($this->punctuation) {
			$pattern = '/[^[:alnum:][^[:punct:]]+/';
		}

		// remove all non-Latin characters from string and replace them with delimiter
		$ret = preg_replace($pattern, $this->delimiter, $ret);

		// remove white space from begin and end
		$ret = trim($ret);

		// make output string lower case
		if ($this->toLower) {
			$ret = strtolower($ret);
		}

		// return converted string
		return (string)preg_replace(["/" . $this->delimiter . "+/", "/" . $this->delimiter . "+$/", "/^" . $this->delimiter . "+/"], [$this->delimiter, "", ""], $ret);
	}

}