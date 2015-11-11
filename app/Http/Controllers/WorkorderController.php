<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateWorkorderRequest;
use App\Http\Requests\UpdateWorkorderRequest;
use App\Repositories\Frontend\Workorder\WorkorderRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class WorkorderController extends AppBaseController
{

	/** @var  WorkorderRepository */
	private $workorderRepository;

	function __construct(WorkorderRepository $workorderRepo)
	{
		$this->workorderRepository = $workorderRepo;
	}

	/**
	 * Display a listing of the Workorder.
	 *
	 * @return Response
	 */
	public function index()
	{
		$workorders = $this->workorderRepository->paginate(10);

		return view('frontend.workorders.index')
			->with('workorders', $workorders);
	}

	/**
	 * Show the form for creating a new Workorder.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('frontend.workorders.create');
	}

	/**
	 * Store a newly created Workorder in storage.
	 *
	 * @param CreateWorkorderRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateWorkorderRequest $request)
	{
		$input = $request->all();

		$workorder = $this->workorderRepository->create($input);

		Flash::success('Workorder saved successfully.');

		return redirect(route('workorders.index'));
	}

	/**
	 * Display the specified Workorder.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$workorder = $this->workorderRepository->find($id);

		if(empty($workorder))
		{
			Flash::error('Workorder not found');

			return redirect(route('workorders.index'));
		}

		return view('frontend.workorders.show')->with('workorder', $workorder);
	}

	/**
	 * Show the form for editing the specified Workorder.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$workorder = $this->workorderRepository->find($id);

		if(empty($workorder))
		{
			Flash::error('Workorder not found');

			return redirect(route('workorders.index'));
		}

		return view('frontend.workorders.edit')->with('workorder', $workorder);
	}

	/**
	 * Update the specified Workorder in storage.
	 *
	 * @param  int              $id
	 * @param UpdateWorkorderRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdateWorkorderRequest $request)
	{
		$workorder = $this->workorderRepository->find($id);

		if(empty($workorder))
		{
			Flash::error('Workorder not found');

			return redirect(route('workorders.index'));
		}

		$this->workorderRepository->updateRich($request->all(), $id);

		Flash::success('Workorder updated successfully.');

		return redirect(route('workorders.index'));
	}

	/**
	 * Remove the specified Workorder from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$workorder = $this->workorderRepository->find($id);

		if(empty($workorder))
		{
			Flash::error('Workorder not found');

			return redirect(route('workorders.index'));
		}

		$this->workorderRepository->delete($id);

		Flash::success('Workorder deleted successfully.');

		return redirect(route('workorders.index'));
	}
}
