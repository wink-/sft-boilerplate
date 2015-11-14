<?php namespace App\Http\Controllers;
use Flash;
use Response;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\Workorder;
use App\Http\Requests\CreateDmrRequest;
use App\Http\Requests\UpdateDmrRequest;
use App\Repositories\Frontend\Dmr\DmrRepository;
use Mitul\Controller\AppBaseController as AppBaseController;


class DmrController extends AppBaseController
{

	/** @var  DmrRepository */
	private $dmrRepository;

	function __construct(DmrRepository $dmrRepo)
	{
		$this->dmrRepository = $dmrRepo;
	}

	/**
	 * Display a listing of the Dmr.
	 *
	 * @return Response
	 */
	public function index()
	{
		$dmrs = $this->dmrRepository->paginate(10);

		return view('frontend.dmrs.index')
			->with('dmrs', $dmrs);
	}

	/**
	 * Lookup a workorder to create a DMR from and load the create page
	 * @param  Request $request 
	 * @return reponse 	
	 */
    public function createDmrFromWorkorder(Request $request)
    {

        $workorder = Workorder::where('WORKORDR', $request->WORKORDR)
            ->firstOrFail();

        return view('frontend.dmrs.create', compact('workorder'));
    }

	/**
	 * Show the form for creating a new Dmr.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('frontend.dmrs.create');
	}

	/**
	 * Store a newly created Dmr in storage.
	 *
	 * @param CreateDmrRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateDmrRequest $request)
	{
		$input = $request->all();

		$dmr = $this->dmrRepository->create($input);

		Flash::success('Dmr saved successfully.');

		return redirect(route('dmrs.index'));
	}

	/**
	 * Display the specified Dmr.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$dmr = $this->dmrRepository->find($id);

		if(empty($dmr))
		{
			Flash::error('Dmr not found');

			return redirect(route('dmrs.index'));
		}

		return view('frontend.dmrs.show')->with('dmr', $dmr);
	}

	/**
	 * Show the form for editing the specified Dmr.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$dmr = $this->dmrRepository->find($id);

		if(empty($dmr))
		{
			Flash::error('Dmr not found');

			return redirect(route('dmrs.index'));
		}

		return view('frontend.dmrs.edit')->with('dmr', $dmr);
	}

	/**
	 * Update the specified Dmr in storage.
	 *
	 * @param  int              $id
	 * @param UpdateDmrRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdateDmrRequest $request)
	{
		$dmr = $this->dmrRepository->find($id);

		if(empty($dmr))
		{
			Flash::error('Dmr not found');

			return redirect(route('dmrs.index'));
		}

		$this->dmrRepository->updateRich($request->all(), $id);

		Flash::success('Dmr updated successfully.');

		return redirect(route('dmrs.index'));
	}

	/**
	 * Remove the specified Dmr from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$dmr = $this->dmrRepository->find($id);

		if(empty($dmr))
		{
			Flash::error('Dmr not found');

			return redirect(route('dmrs.index'));
		}

		$this->dmrRepository->delete($id);

		Flash::success('Dmr deleted successfully.');

		return redirect(route('dmrs.index'));
	}
}
