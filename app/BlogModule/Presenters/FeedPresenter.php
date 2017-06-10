<?php declare(strict_types=1);

namespace App\BlogModule\Presenters;

use App\BlogModule\Post\PostRepository;
use App\Presenters\BasePresenter;
use Nette\Application\UI\Presenter;


final class FeedPresenter extends Presenter
{

	use BasePresenter;

	/**
	 * @var PostRepository
	 */
	private $postRepository;


	public function __construct(
		PostRepository $postRepository
	) {
		parent::__construct();
		$this->postRepository = $postRepository;
	}


	public function renderDefault(): void
	{
		$template = $this->getTemplate();
		$template->posts = $this->postRepository->findAll();
	}
}