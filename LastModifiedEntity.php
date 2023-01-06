<?php

namespace Gsdk\LastModified;

class LastModifiedEntity {

	private ?\DateTime $updatedAt = null;

	public function set($updatedAt): void {
		if (is_string($updatedAt))
			$updatedAt = new \DateTime($updatedAt);
		else if (is_int($updatedAt)) {
			$timestamp = $updatedAt;
			$updatedAt = new \DateTime();
			$updatedAt->setTimestamp($timestamp);
		} else if (!$updatedAt instanceof \DateTime)
			throw new \Exception('DateTime format required');

		$this->updatedAt = $updatedAt;
	}

	public function get(): ?\DateTime {
		return $this->updatedAt;
	}

}